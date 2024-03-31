<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Continental Association of African Neurosurgical Societies | Newsletter</title>
    <meta name="keywords" content="" />
    <meta name="description" content="Caans-website Built By Mahmud Bakale">
    <meta name="author" content="Mahmud Bakale">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="subscribe">
        <img src="{{asset('images/b3a79706-a1fc-4102-ac81-797f7c96adeb.jpeg')}}" alt=""  width="100" height="77">
        <h2 class="subscribe__title">Let's keep in touch</h2>
        @if (session('success'))
            {{-- <p style="color: green;">{{ session('success') }}</p> --}}
            <script>
                alert('{{ session('success') }}');
                window.location = "https://africa-caans.org";
            </script>
        @endif

        @if (session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
        <p class="subscribe__copy">Subscribe to keep up with fresh news and exciting updates. We promise not to spam you!
        </p>
        <form action="{{ route('subscribe') }}" method="POST">
            @csrf
            <div class="form">
                <input type="email" name="email" class="form__email" placeholder="Enter your email address" />
                <button class="form__button">Send</button>
            </div>
        </form>
        <div class="notice">
            <input type="checkbox">
            <span class="notice__copy">I agree to my email address being stored and uses to recieve monthly
                newsletter.</span>
        </div>
    </div>
    <!-- partial -->

</body>

</html>
