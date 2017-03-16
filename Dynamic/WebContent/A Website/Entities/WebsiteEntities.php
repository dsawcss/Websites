<?php 

class WebsiteEntity
{
	public $Xchange;
	public $TickerSymbol;
	public $Name;
	public $Date;
	public $LastOpen;
	public $LastHigh;
	public $LastLow;
	public $LastClose;
	public $LastVol;
	public $Open;
	public $High;
	public $Low;
	public $Close;
	public $Vol;
	
	function __construct ($id, $country, $name, $address1, $address2, $address3, $image, $currency, $price)
	{
		$this->id = $id;
		$this->Xchange = $Xchange;
		$this->TickerSymbol = $TickerSymbol;
		$this->Name = $Name;
		$this->Date = $Date;
		$this->LastOpen = $LastOpen;
		$this->LastHigh = $LastHigh;
		$this->LastLow = $LastLow;
		$this->LastClose = $LastClose;
		$this->LastVol = $LastVol;
		$this->Open = $Open;
		$this->High = $High;
		$this->Low = $Low;
		$this->Close = $Close;
		$this->Vol = $Vol;
	}
                                              
}
?> 