@extends(Config::get('credentials.email'))

@section('content')
<p>{{ trans('credentials.the_email_for_your_account_on') }} <a href="{!! $url !!}">{!! Config::get('app.name') !!}</a> {{ trans('credentials.has_just_been_changed_from_to', ['old' => $old, 'new' => $new) }}</p>
<p>{{ trans('credentials.if_this_was_not_you_please_contact_us_immediately') }}</p>
@stop
