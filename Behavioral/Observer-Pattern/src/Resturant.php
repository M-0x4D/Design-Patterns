<?php

namespace Observer;

use SplObjectStorage;
// use SplObserver;

class Resturant implements \SplSubject
{
	private  $observers;
	private $newOrders = 0;

	function __construct()
	{
		$this->observers = new \SplObjectStorage;
	}

	/**
	 * Attach an SplObserver
	 * Attaches an SplObserver so that it can be notified of updates.
	 *
	 * @param \SplObserver $observer The SplObserver to attach.
	 * @return void
	 */
	public function attach(\SplObserver $observer)
	{
		$this->observers->attach($observer);
	}

	/**
	 * Detach an observer
	 * Detaches an observer from the subject to no longer notify it of updates.
	 *
	 * @param \SplObserver $observer The SplObserver to detach.
	 * @return void
	 */
	public function detach($observer)
	{
		$this->observers->detach($observer);

	}

	/**
	 * Notify an observer
	 * Notifies all attached observers.
	 * @return void
	 */
	public function notify()
	{
		/**
		 * @var \SplObserver $observer
		 */
		foreach($this->observers as $observer)
		{
			$observer->update($this);

		}
	}

	/**
	 * Receive update from subject
	 * This method is called when any SplSubject to which the observer is attached calls SplSubject::notify().
	 *
	 * @param \SplSubject $subject The SplSubject notifying the observer of an update.
	 * @return void
	 */
	public function update($subject)
	{
	}



	public function add_new_order()
	{
		$this->newOrders +=1;
		$this->notify();

	}

	function get_order_number()
	{
		return $this->newOrders;
	}
}
