<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    
</head>
<body>
    <div id='app'>
        <div class="Wrapper">
            <div class="SidebarContainer">
            <div class="SidebarHeader">
                LOGO
            </div>
            <nav class="Sidebar">
                <ul class="Sidebar__List">
                    <li class="Sidebar__Element">
                        <a href="/recordatorios/" class="Sidebar__Link">
                            <div class="Sidebar__Icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="Sidebar__Description">
                                Reminders
                            </div>
                        </a>
                    </li>
                    <li class="Sidebar__Element">
                        <a href="/config" class="Sidebar__Link">
                            <div class="Sidebar__Icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="Sidebar__Description">
                                Config
                            </div>
                        </a>
                    </li>
                    <li class="Sidebar__Element">
                        <a href="/mail-list" class="Sidebar__Link">
                            <div class="Sidebar__Icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="Sidebar__Description">
                                Sent Emails
                            </div>
                        </a>
                    </li>
                    <li class="Sidebar__Element">
                        <a href="/logs" class="Sidebar__Link">
                            <div class="Sidebar__Icon">
                                <i class="fa fa-info-circle"></i>
                            </div>
                            <div class="Sidebar__Description">
                                Logs
                            </div>
                        </a>
                    </li>
                    <li class="Sidebar__Element">
                        <a href="/stats" class="Sidebar__Link">
                            <div class="Sidebar__Icon">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <div class="Sidebar__Description">
                                Stats
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
            
            <div class="Content">
                
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>