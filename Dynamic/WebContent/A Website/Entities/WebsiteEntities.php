<?php 
//Building Functions for Database
class FinanceEntity
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
	public $Comments;
	
	function __construct ($Xchange, $TickerSymbol, $Name, $Date, 
			$LastOpen, $LastHigh, $LastLow, $LastClose, $LastVol, 
			$Open, $High, $Low, $Close, $Vol )
	{
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
		$this->Comments = $Comments;
	}
                                              
}
?> 