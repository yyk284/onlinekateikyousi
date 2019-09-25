<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>オンスタ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="家庭教師をオンラインで">
    <meta name="keywords" content="オンライン家庭教師,オンライン,家庭教師,オンスタ,沖縄">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/slide.css">
    <link rel="alternate stylesheet" href="/css/change.css" title="change">
    <script src="/js/openclose.js"></script>
    <script src="/js/fixmenu_pagetop.js"></script>
</head>

<div class = "container">
    <div class="admin_wrapper">
        <form action="/admin_sign_in" method="post" name="Login_Form" class="admin_form-signin">
            <h3 class="admin_form-signin-heading">Sign In</h3>
            <hr class="admin_colorgraph"><br>
            <input type="text" class="admin_form-control" name="Username" placeholder="Username" required="" autofocus="" />
            <input type="password" class="admin_form-control" name="Password" placeholder="Password" required=""/>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Submit</button>
        </form>
    </div>
</div>
