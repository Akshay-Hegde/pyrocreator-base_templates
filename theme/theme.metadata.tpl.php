<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<meta name="author" content="Antoine Benevaut < antoine@cavaencoreparlerdebits.fr >">

<title>{{ template:title }} | {{ settings:site_name }}</title>

<base href="{{ url:base }}"/>

{{ theme:favicon file="favicon.ico" }}
{{ theme:favicon file="apple-touch-icon.png" rel="apple-touch-icon" }}
{{ theme:favicon file="apple-touch-icon-precomposed.png" rel="apple-touch-icon" }}
{{ theme:favicon file="apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon" }}
{{ theme:favicon file="apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon" }}
{{ theme:favicon file="apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon" }}

{{ asset:css file="style.css" file_min="style.min.css" group="header" }}
{{ asset:js file="style.js" file_min="style.min.js" group="header" }}
{{ asset:render group="header" }}

{{ template:metadata }}

<script>
  	window.debug = true;

	if (window.debug) {
		console.log("[THEME LOG : ON]");
	}

	var SITE_URL = "{{ url:site }}";
	var BASE_URL = "{{ url:base }}";
</script>