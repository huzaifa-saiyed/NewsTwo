<?php

namespace Kitchen\News\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$displayText = $observer->getData('event_news');
        echo $displayText->getText() . " - Event </br>";
        $displayText->setText('Execute news event successfully.');

        return $this;
	}
}