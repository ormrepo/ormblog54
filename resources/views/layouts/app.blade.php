<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="@yield('meta_description', 'The ormblog.')">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <title>Ormrepo | @yield('meta-title', 'The Ormblog')</title>
    <link rel="manifest" href="/manifest.json">

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(["init", {
            appId: "aaffc0f0-16b1-4477-a2bc-e1632c17bfc0",
            autoRegister: false,
            notifyButton: {
                enable: true /* Set to false to hide */
            },
            safari_web_id: 'web.onesignal.auto.4715199e-f86d-44ca-99ff-a9854a17e932'
        }]);
    </script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/css/bulma.css" type="text/css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="alternate" type="application/rss+xml" title="Ormblog" href="{{ url('feed') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<body>

    @include('partials.navigation')

    @include('partials.status')


    @yield('content')

    @include('partials.footer')

    @include('partials.analyticstracking')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("summernote") });
    </script>

    <script type="application/javascript" src="/js/bootstrap.js"></script>
    <script type="application/javascript" src="{{ mix('/js/app.js') }}"></script>

    {{-- Show password--}}
    <script src="/js/password.js"></script>
    <script>
        $(function() {
            $('#password').password().on('show.bs.password', function(e) {
                $('#eventLog').text('On show event');
                $('#methods').prop('checked', true);
            }).on('hide.bs.password', function(e) {
                $('#eventLog').text('On hide event');
                $('#methods').prop('checked', false);
            });
            $('#methods').click(function() {
                $('#password').password('toggle');
            });
        });
    </script>
    <script>
        $(function() {
            $('#password_confirmation').password().on('show.bs.password', function(e) {
                $('#eventLog').text('On show event');
                $('#methods').prop('checked', true);
            }).on('hide.bs.password', function(e) {
                $('#eventLog').text('On hide event');
                $('#methods').prop('checked', false);
            });
            $('#methods').click(function() {
                $('#password_confirmation').password('toggle');
            });
        });
    </script>
    {{--Mobile menu--}}
    <script>
        $(function() {
            $("a[href=#menuExpand]").click(function(e) {
                $(".menu").toggleClass("menuOpen");
                e.preventDefault();
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $('select').select2();
    </script>
    <script>
        // Google Analytics
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-93137682-1', 'auto');
        ga('send', 'pageview');

    </script>



</body>

</html>

