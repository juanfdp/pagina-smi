<html>
<head>
<title>TEST</title>
<script type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
</head>
<body>
<!-- Plupper Button -->
<div id="plupperButton"></div>
<!-- End of Plupper Button Code -->

<script type="text/javascript">
    function doMyStuff() {
        var visitorUUID = plupper.getVisitorUUID();
        $.post('http://api.plupper.com/resources/message',
        {
            p: 'accountName@plupper.com',
            v: visitorUUID,
            content: 'My Own Message: Hello from plupper !!'
        });
    }
</script>

<script src="https://www.google.com/jsapi"></script>
<script type="text/javascript"
        src="https://static.plupper.com/js/plupper.js"></script>
<script type="text/javascript">
        plupper.init("accountName@plupper.com");
	plupper.setOnStartCallback(function() {doMyStuff();});
</script>

</body>
</html>