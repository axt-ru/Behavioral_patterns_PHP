<?php

class HandHunter implements SplSubject
{
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage;
    }

    public function attach(SplObserver $observer): void
    {
       $this->observers->attach($observer);
       echo "Вы подписались на уведомления".PHP_EOL;
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "Вы отписаны от уведомлениq".PHP_EOL;
    }

    public function notify(): void
    {
        echo "Оповещение соискателей".PHP_EOL;
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    public function vacancyAppeared(){
        echo "Появилась новая вакансия".PHP_EOL;
        $this->notify();
    }
}