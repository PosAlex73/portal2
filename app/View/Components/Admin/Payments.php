<?php

namespace App\View\Components\Admin;

use App\Orders\Payments\PaymentRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class Payments extends Component
{
    public Collection $payments;
    public $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selected = '')
    {
        /** @var PaymentRepository $payment_repo */
        $payment_repo = App::make(PaymentRepository::class);
        $this->payments = $payment_repo->getPayments();
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.payments');
    }
}
