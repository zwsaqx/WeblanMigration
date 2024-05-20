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
<div class="dropdown">
    <button>TCPIP Resources</button>
    <div class="dropdown-content">
      <a href="/TCPIP/TCPIPTutorial">Tutorial</a>

      <a href="/TCPIP/TCPIPQuiz">Quiz</a>

      <a href="/TCPIP/TCPIPModelling">Modelling</a>

      <a href="/TCPIP/TCPIPScenarios">Scenarios</a>

      <a href="/TCPIP/TCPIPKeyTerms">Key Terms</a>
      
      <a href="/TCPIP/TCPIPReview">Review Questions</a>
    </div>
  </div>
  @else
  <meta http-equiv="refresh" content="0; URL=/">
@endauth
</html>

