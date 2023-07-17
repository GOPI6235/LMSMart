<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\payment;
use App\Models\Teacher;
use Illuminate\Database\QueryException;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;

class PurchaseController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();
        $paymentStatus = null;

        if (Auth::check()) {
            $user = Auth::user();
            $payment = Payment::where('user_id', $user->id)->first();

            if ($payment) {
                $paymentStatus = $payment->status;
            }
        }

        return view('Frontend.watch', compact('teacher', 'paymentStatus'));
    }


    public function payment(Request $request){
        // $data =$request->all();
        $teach_id = $request->teach_id;
        $amount = $request->amount;
        $user_id = Auth::id();

        $payment = new payment();

        $payment->teach_id = $request->input('teach_id');
        $payment->user_id = $user_id;
        $payment->amount = $request->input('amount');

        $payment->save();


        return view('Frontend.Teacher.checkout',compact('teach_id','amount'));
        
    }

    public function RazorPayStore(Request $request)
    {
        
        $input = $request->all();

        $api = new Api("rzp_test_zRyA7WHAPmrtQg", "x5lOO9VdfdOhdcWo1FfR8Xd1");

        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
            } catch (QueryException $e) {
                return  $e->getMessage();
                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful');
        $teach_id=$request->teach_id;
        $payment = payment::where('teach_id',$teach_id)->get();

        foreach($payment as $item)
        {
            $item->update(['payment_status' => 1]);

        }
        return redirect('/');
           
    }
}
