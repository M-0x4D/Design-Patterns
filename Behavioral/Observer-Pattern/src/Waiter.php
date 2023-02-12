<?php
namespace Observer;

class Waiter implements \SplObserver
{

	private $state;
	/**
	 * Receive update from subject
	 * This method is called when any SplSubject to which the observer is attached calls SplSubject::notify().
	 *
	 * @param \SplSubject $subject The SplSubject notifying the observer of an update.
	 * @return void
	 */
	public function update($subject) {

        /**
         * @var Resturant $subject
         */
        $this->state = sprintf("Waiter is ready for order number %s" , $subject->get_order_number());
	}



    public function get_state()
    {
        return $this->state;
    }
}