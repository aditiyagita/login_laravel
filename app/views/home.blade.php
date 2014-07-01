@extends('index')

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
              <h2>Registrasi</h2>
              <form role="form" class="form-horizontal" method="post" action="register">
                  <div class="form-group">
                    <label for="tanggal">Username</label>
                    <input type="text" class="form-control" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Password</label>
                    <input type="text" class="form-control" name="password" required>
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Email</label>
                    <input type="text" class="form-control" name="email" required>
                  </div>

                  <button type="submit" class="btn btn-warning btn-lg btn-block">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

@stop