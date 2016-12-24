@extends('layouts.main')


@section('content')


  <div class="panel panel-default">
            <table class="table">
              <tr>
                <td class="middle">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="http://placehold.it/100x100" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Contact 1</h4>
                      <address>
                        <strong>Job</strong><br>
                        contact1@sample.com
                      </address>
                    </div>
                  </div>
                </td>
                <td width="100" class="middle">
                  <div>
                    <a href="#" class="btn btn-circle btn-default btn-xs" title="Edit">
                      <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    <a href="#" class="btn btn-circle btn-danger btn-xs" title="Edit">
                      <i class="glyphicon glyphicon-remove"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="middle">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="http://placehold.it/100x100" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Contact 2</h4>
                      <address>
                        <strong>Job 2</strong><br>
                        contact2@sample.com
                      </address>
                    </div>
                  </div>
                </td>
                <td width="100" class="middle">
                  <div>
                    <a href="#" class="btn btn-circle btn-default btn-xs" title="Edit">
                      <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    <a href="#" class="btn btn-circle btn-danger btn-xs" title="Edit">
                      <i class="glyphicon glyphicon-remove"></i>
                    </a>
                  </div>
                </td>
              </tr>
            </table>            
          </div>
          
               <div class="text-center">
            <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>




@endsection