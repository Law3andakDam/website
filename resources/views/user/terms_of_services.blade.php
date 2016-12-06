@extends('user.layouts.layout')



@section('content')

<p><strong>INTRODUCTION</strong></p>
{{getIntroduction()}}
<br><br>

<p><strong>BLOOD DONORS﻿</strong></p>
{{getBloodDoners()}}
<br><br>

<p><strong>﻿CONFIDENTIALITY</strong></p>
{{getConfidentiality()}}
<br><br>

<p><strong>LAW3ANDAKDAM RIGHTS</strong></p>
{{getLaw3andakDamRights()}}


@endsection