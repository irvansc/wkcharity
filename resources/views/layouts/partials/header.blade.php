
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{$setting->company_name}} - @yield('title')</title>
  <link rel="icon" href="{{asset('/storage').$setting->path_image ?? ''}}" type="imgae/*">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

@stack('css_vendor')

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('/AdminLTE/dist/css/adminlte.min.css') }}">

<style>
.note-editor {
    margin-bottom: 0;
}
.note-editor.is-invalid {
    border-color: var(--danger);
}
.nav-sidebar .nav-header {
    font-size: .6rem;
    font-weight: bold;
    color: #888;
}
</style>

@stack('css')
</head>