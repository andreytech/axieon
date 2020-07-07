
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Axieon</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/axi_style_home.css?version=1593687165" /></head>
{{--    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/style.css?version=1589150987">--}}
<body>
<div class="ax-signup">
    <div class="ax-signup__leftbar">
        <a href="#" class="ax-signup__logo">
            <img src="/assets/images/ax-logo-white.svg" alt="axieon-logo"/>
        </a>
        <h3>
            <i>The Better Way to</i>
            Analyze Competitive <br />
            <span>Backlinks</span>
        </h3>
        <!--   <div class="img"></div> -->
    </div><!-- end left-bar -->
    @yield('content')
</div>
<script>
    var app_url = '{{ env('APP_URL') }}';
</script>

<script src="/assets/js/vendor.min.js?version=1593687165"></script>
<script src="/assets/js/custom.min.js?version=1593687165"></script>
</body>
</html>

