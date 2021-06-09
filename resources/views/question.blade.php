<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Q/A</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://challenge.veganhacktivists.org/css/app.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1 class="text-center my-5">
        <a href="http://localhost:80" class="text-dark">
            Q &amp; A
        </a>
    </h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                <h2 class="bg-primary text-white p-3 mb-3">
		    {{ $question_title }}	
		</h2>

                @foreach ($answers as $a)
                <p class="border-bottom pb-3">
                    {{ $a->content }}
                </p>
                @endforeach

                <form class="mt-3" action="http://localhost:80/questions/{{ $question_id }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <h4 class="bg-primary text-white p-3">
                            Answer the question!
                        </h4>
                        <textarea name="answer" class="form-control "></textarea>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">
                            Answer question
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
