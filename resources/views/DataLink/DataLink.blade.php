<!DOCTYPE html>
<html lang="en">
    @auth
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DropdownList.css')}}">
</head>
<body>
    <div class="dropdown">
        <button>Bluetooth Resources</button>
    <div class="dropdown-content">
    <a href="/DataLink/DataLinkTutorial">Tutorial</a>
    
    <a href="/DataLink/DataLinkQuiz">Quiz</a>
    
    <a href="/DataLink/DataLinkModelling">Modelling</a>
    
    <a href="/DataLink/DataLinkScenarios">Scenarios</a>
    
    <a href="/DataLink/DataLinkKeyTerms">Key Terms</a>
    
    <a href="/DataLink/DataLinkReview">Review Questions</a>
    
</body>
@else
<meta http-equiv="refresh" content="0; URL=/">
@endauth
</html>