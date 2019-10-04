@component('mail::message')

Name:
  {{$data->name}}

Subject:
   {{$data->subject}}

Message:
   {{$data->message}}

Email:
  {{$data->email}}
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{$data->name}}
@endcomponent
