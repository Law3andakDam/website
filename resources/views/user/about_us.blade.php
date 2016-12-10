@extends('user.layouts.layout')



@section('content')

<div style="margin-left: 5%; margin-right:5%; margin-bottom:5%;">

<h2 style=" font-family: Arial, Helvetica, sans-serif; color: #3a3b38;">Mission</h2>
<h4 style="color:#3a3b38;">{{getMission()}}</h4>
<br><br>

<h2 style=" font-family: Arial, Helvetica, sans-serif; color: #3a3b38;">Service Description</h2>
<h4 style="color:#3a3b38;">{{getServiceDescription()}}</h4>
<br><br>

<h2 style=" font-family: Arial, Helvetica, sans-serif; color: #3a3b38;">Copyright</h2>
<h4 style="color:#3a3b38;">{{getCopyright()}}</h4>
<br><br>

</div>

@endsection