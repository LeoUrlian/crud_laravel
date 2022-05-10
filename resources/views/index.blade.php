@extends('layouts.template')
@section('title', 'Home')
@section('content')
<h2 class="mb-4" style="text-align:center;">Home</h2>
<div class="container">
  <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>

    </thead>
    <tbody>

    </tbody>
    <tfoot>

    </tfoot>
  </table>
</div>
<script type="text/javascript">
  $(document).ready( function () {
    var table = $('#example').DataTable({
      responsive: true
    });
  });
</script>
@endsection