<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.admin.header')
</head>
<body>
  <div class="container-flex h-100">
    <div class="h-100 row">
      <div class="col-2 left">
        @include('includes.admin.sidebar')
      </div>
      <div class="col-10 right">
        <div class="container-flex">
        @include('includes.admin.navbar')
        </div>
        <div class="container-fluid mainBody">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  @yield('scripts')
</body>
<script>
$('#editGame').on('show.bs.modal', function (event) {
var id = $(event.relatedTarget).data('id');
console.log('test owrking ' + id);
$(this).find('form').attr('action', 'games/edit/' + id);
})
</script>
</html>
