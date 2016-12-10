@extends('user.layouts.layout')



@section('content')

<div style="margin-left: 5%; margin-right:5%; margin-bottom:5%;">

<h2 style=" font-family: Arial, Helvetica, sans-serif; color: #3a3b38;">Introduction</h2>
<h4 style="color:#3a3b38;">{{getIntroduction()}}</h4>
<br><br>


<h2 style=" font-family: Arial, Helvetica, sans-serif; color: #3a3b38;">Blood Doners</h2>

<h4 style="color:#3a3b38;">{{getBloodDoners()}}</h4>
<br><br>


<h2 style=" font-family: Helvetica, Arial, sans-serif; color: #3a3b38;">Confidentiality</h2>

<h4 style="color:#3a3b38;">{{getConfidentiality()}}</h4>
<br><br>

<h2 style=" font-family: Helvetica, Arial, sans-serif; color: #3a3b38;">Law3andakDam Rights</h2>

<h4 style="color:#3a3b38;">{{getLaw3andakDamRights()}}</h4>

</div>

@endsection

