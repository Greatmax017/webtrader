
function chartTheme(){
	if($('body').attr('data-theme-version') == "light"){
		return "Light";
	}else{
		return "Dark";
	}
}
function tradingChart(){
  new TradingView.widget(
	{
	  "width": "100%",
	  "height": 516,
	  "symbol": "OANDA:XAUUSD",
	  "interval": "60",
	  "timezone": "Etc/UTC",
	  "theme": chartTheme(),
	  "style": "1",
	  "locale": "en",
	  "toolbar_bg": "#f1f3f6",
	  "enable_publishing": false,
	  "withdateranges": false,
	  "hide_side_toolbar": false,
	  "allow_symbol_change": false,
	  "container_id": "tradingview_e8053"
	}
  );
}


jQuery(window).on('load',function(){
	jQuery('#theme_version').on('change',function(){
		tradingChart();
	});
	setTimeout(function(){
	}, 1000); 
		tradingChart();
	
});