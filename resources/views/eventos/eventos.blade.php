@extends('layouts.master')
 
@section('content')
<div class="page">
  <div class="page-header page-header-bordered page-header-tabs">
    <h1 class="page-title">EVENTOS</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">INICIO</a></li>
      <li class="breadcrumb-item active">EVENTOS</li>
    </ol>
    <div class="navbar-collapse navbar-collapse-toolbar">
      <!-- Navbar Toolbar -->
      <ul class="nav navbar-toolbar">
        <li class="nav-item">
          <form class="page-search-form">
            <div style="padding-top: 6.5%;">
              <div class="input-search input-search-dark">
                <i class="input-search-icon md-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Buscar...">
              </div>
            </div>
          </form>
        </li>
      </ul>
      <!-- End Navbar Toolbar -->
      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
        <li class="nav-item dropdown dropdown-fw dropdown-mega">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
          role="button">Ordenar por <i class="icon md-chevron-down" aria-hidden="true"></i></a>
          <div class="dropdown-menu" role="menu">
            <div class="mega-content">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Fecha</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Orden1</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Orden2</a>
            </div>
          </div>
        </li>
      </ul>
      <!-- End Navbar Toolbar Right -->
    </div>
    <ul class="nav nav-tabs nav-tabs-line" role="tablist" id="exampleFilter">
      <li class="nav-item" role="presentation">
        <a class="active nav-link" href="#" aria-expanded="true" role="tab" data-filter="activo">Activos</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="pasado">Pasados</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" href="#" aria-expanded="false" aria-controls="exampleList" role="tab" data-filter="*">Todos</a>
      </li>
    </ul>
  </div>
  <div class="page-content">
    <ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2" data-plugin="filterable" data-filters="#exampleFilter">
      <li data-type="activo">
        <div class="card card-shadow contenedor">
          <div class="evento" style="background-image: url({{ asset('assets/images/eventos/evento1.png') }})">
            <div style="display: inline;">
                <i class="icon md-check btn btn-round btn-success " aria-hidden="true"></i>
            <div class="btn-group float-right" role="group">
              <button type="button" class="navbar-toggler" style="display: block !important;" id="exampleIconDropdown4" data-toggle="dropdown" aria-expanded="false">
                <i class="icon md-more-vert" aria-hidden="false"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="exampleIconDropdown4" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Editar</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Eliminar</a>
              </div>    
            </div>
            
            </div>
          </div>            
          <div class="card-block desc">
            <h4 class="card-title">LA PAZ EXPONE</h4>
            <p><i class="icon md-calendar-note" aria-hidden="true"></i>  Del 25 de Octubre al 01 de Noviembre</p>  
            <p class="datos">
              <i class="icon md-shopping-cart" aria-hidden="true" title="Venta de Entradas"><i class="icon md-check" aria-hidden="true"></i></i>
              <i class="icon md-star" aria-hidden="true" title="Actividades">2</i>
              <i class="icon md-calendar-check" aria-hidden="true" title="Días">100</i>
            </p>
          </div>
        </div>
      </li>
      <li data-type="activo">
        <div class="card card-shadow contenedor">
          <div class="evento" style="background-image: url({{ asset('assets/images/eventos/evento3.png') }})">
            <button type="button" class="btn btn-floating btn-success btn-sm waves-effect"><i class="icon md-check" aria-hidden="true"></i></button>
            <div class="btn-group float-right" role="group">
              <button type="button" class="navbar-toggler" style="display: block !important;" id="exampleIconDropdown4" data-toggle="dropdown" aria-expanded="false">
                <i class="icon md-more-vert" aria-hidden="false"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="exampleIconDropdown4" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Editar</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Eliminar</a>
              </div>  
            </div>
          </div>            
          <div class="card-block desc">
            <h4 class="card-title">LA PAZ EXPONE</h4>
            <p><i class="icon md-calendar-note" aria-hidden="true"></i>  Del 25 de Octubre al 01 de Noviembre</p>  
            <p class="datos">
              <i class="icon md-shopping-cart" aria-hidden="true" title="Venta de Entradas"><i class="icon md-check" aria-hidden="true"></i></i>
              <i class="icon md-star" aria-hidden="true" title="Actividades">2</i>
              <i class="icon md-calendar-check" aria-hidden="true" title="Días">100</i>
            </p>
          </div>
        </div>
      </li>
      <li data-type="pasado">
        <div class="card card-shadow contenedor">
          <div class="evento" style="background-image: url({{ asset('assets/images/eventos/evento3.png') }})">
            <button type="button" class="btn btn-floating btn-success btn-sm waves-effect"><i class="icon md-check" aria-hidden="true"></i></button>
            <div class="btn-group float-right" role="group">
              <button type="button" class="navbar-toggler" style="display: block !important;" id="exampleIconDropdown4" data-toggle="dropdown" aria-expanded="false">
                <i class="icon md-more-vert" aria-hidden="false"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="exampleIconDropdown4" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Editar</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Eliminar</a>
              </div>  
            </div>
          </div>            
          <div class="card-block desc">
            <h4 class="card-title">LA PAZ EXPONE</h4>
            <p><i class="icon md-calendar-note" aria-hidden="true"></i>  Del 25 de Octubre al 01 de Noviembre</p>  
            <p class="datos">
              <i class="icon md-shopping-cart" aria-hidden="true" title="Venta de Entradas"><i class="icon md-close" aria-hidden="true"></i></i>
            </p>
          </div>
        </div>
      </li>
      <li data-type="pasado">
        <div class="card card-shadow contenedor">
          <div class="evento" style="background-image: url({{ asset('assets/images/eventos/evento1.png') }})">
            <button type="button" class="btn btn-floating btn-success btn-sm waves-effect"><i class="icon md-check" aria-hidden="true"></i></button>
            <div class="btn-group float-right" role="group">
              <button type="button" class="navbar-toggler" style="display: block !important;" id="exampleIconDropdown4" data-toggle="dropdown" aria-expanded="false">
                <i class="icon md-more-vert" aria-hidden="false"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="exampleIconDropdown4" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Editar</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Eliminar</a>
              </div>  
            </div>
          </div>            
          <div class="card-block desc">
            <h4 class="card-title">LA PAZ EXPONE</h4>
            <p><i class="icon md-calendar-note" aria-hidden="true"></i>  Del 25 de Octubre al 01 de Noviembre</p>  
            <p class="datos">
              <i class="icon md-shopping-cart" aria-hidden="true" title="Venta de Entradas"><i class="icon md-close" aria-hidden="true"></i></i>
            </p>
          </div>
        </div>
      </li>
      <li data-type="activo">
        <div class="card card-shadow contenedor">
          <div class="evento" style="background-image: url({{ asset('assets/images/eventos/evento3.png')}})">
            <button type="button" class="btn btn-floating btn-success btn-sm waves-effect"><i class="icon md-check" aria-hidden="true"></i></button>
            <div class="btn-group float-right" role="group">
              <button type="button" class="navbar-toggler" style="display: block !important;" id="exampleIconDropdown4" data-toggle="dropdown" aria-expanded="false">
                <i class="icon md-more-vert" aria-hidden="false"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="exampleIconDropdown4" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Editar</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Eliminar</a>
              </div>  
            </div>
          </div>            
          <div class="card-block desc">
            <h4 class="card-title">LA PAZ EXPONE</h4>
            <p><i class="icon md-calendar-note" aria-hidden="true"></i>  Del 25 de Octubre al 01 de Noviembre</p>  
            <p class="datos">
              <i class="icon md-shopping-cart" aria-hidden="true" title="Venta de Entradas"><i class="icon md-check" aria-hidden="true"></i></i>
              <i class="icon md-star" aria-hidden="true" title="Actividades">2</i>
              <i class="icon md-calendar-check" aria-hidden="true" title="Días">100</i>
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="site-action" data-target="#addProjectForm" data-toggle="modal" data-plugin="actionBtn">
  <button type="button" data-action="add" class="site-action-toggle btn-raised btn btn-success btn-floating waves-effect">
    <i class="icon md-plus" aria-hidden="true"></i>
  </button>
</div>          
<div class="modal fade" id="addProjectForm" aria-hidden="true" aria-labelledby="addProjectForm" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content mod_c">
      <div class="modal-header">
        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
        <h4 class="modal-title">NUEVO EVENTO</h4>
      </div>
      <div class="modal-body mod_b">
        <form action="#" method="post" role="form" id="crear_evento" autocomplete="off">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-12">
                  <div class="mod_form">
                    <h4>DATOS GENERALES</h4>
                    <div class="form-group form-material row">
                      <label class="col-md-4 form-control-label">NOMBRE EVENTO</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="ev_desc" name="ev_desc" required>
                      </div>
                    </div>
                    <div class="form-group form-material row">
                      <label class="col-md-4 form-control-label">FECHA INICIO</label>
                      <div class="col-md-8">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="icon md-calendar" aria-hidden="true"></i>
                          </span>
                          <input type="date" class="form-control" name="ev_fec_ini" id="ev_fec_ini" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-material row">
                      <label class="col-md-4 form-control-label">FECHA FIN</label>
                      <div class="col-md-8">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="icon md-calendar" aria-hidden="true"></i>
                          </span>
                          <input type="date" class="form-control" name="ev_fec_fin" id="ev_fec_fin" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-material row">
                      <label class="form-control-label">CONTENIDO</label>
                      <textarea class="col-lg-12" id="ev_contenido" name="ev_contenido" data-plugin="summernote" rows="1" required></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="mod_form">
                      <H4>PUBLICACIÓN</H4>   
                      <div class="form-group form-material row" align="center">
                        <label class="col-md-4 form-control-label">PUBLICAR</label>
                        <div class="col-md-8">
                          <div class="float-right mr-20">
                            <input type="checkbox" id="ev_publicar" name="ev_publicar" value="1" data-plugin="switchery" data-switchery="true" style="display: none;" checked>
                          </div>
                        </div>
                      </div>
                      <!--
                      <div class="form-group form-material">
                        <label class="form-control-label">LINK</label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="icon md-link" aria-hidden="true"></i>
                          </span>
                          <input type="url" class="form-control" name="ev_video" id="ev_video" required>
                        </div>
                      </div>
                      <div class="form-group form-material">
                        <label class="form-control-label">FECHA PUBLICACIÓN</label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="icon md-calendar" aria-hidden="true"></i>
                          </span>
                          <input type="date" class="form-control" name="ev_fec_creacion" id="ev_fec_creacion" required>
                        </div>
                      </div>
                    -->
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-12">
                  <div class="mod_form">
                    <h4>VENTA DE ENTRADAS</h4>
                    <div class="form-group form-material row" align="center">
                      <label class="col-md-4 form-control-label">HABILITAR</label>
                      <div class="col-md-8">
                        <div class="float-right mr-20">
                          <input type="checkbox" id="ev_publicar" name="ev_publicar" value="1" data-plugin="switchery" data-switchery="true" style="display: none;" checked>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-12">
                  <div class="mod_form">
                    <h4>MULTIMEDIA</h4>
                    <div class="form-group form-material">
                      <label class="form-control-label">BANNER</label>
                      <div class="input-group">
                          <span class="input-group-addon">
                            <a href="#"><i class="icon md-image"></i></a>
                          </span>
                          <input type="text" class="form-control" name="ev_banner" id="ev_banner" required>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="form-control-label">VIDEO</label>
                      <div class="input-group">
                          <span class="input-group-addon">
                            url
                          </span>
                          <input type="url" class="form-control" name="ev_video" id="ev_video" required>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="form-control-label">BROCHURE</label>
                      <div class="input-group">
                          <span class="input-group-addon">
                            <a href="#"><i class="icon md-file-plus"></i></a>
                          </span>
                          <input type="text" class="form-control" name="ev_pdf" id="ev_pdf" required>
                      </div>
                    </div>
                  </div>
                </div>    
              </div>
              <br>
              <div class="row">
                <div class="col-lg-12">
                    <div class="modal-footer text-right">
                      <button type="submit" class="btn btn-success waves-effect" id="validar">Crear</button>
                      <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancelar</a>
                    </div>
                </div>    
              </div>
            </div>
          </div>
          <br>
        
      </div>
      
      </form>
    </div>
  </div>
</div>
@endsection

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/global/vendor/magnific-popup/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/gallery.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/global/vendor/dropify/dropify.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/global/vendor/summernote/summernote.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/global/vendor/formvalidation/formValidation.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/examples/css/forms/validation.css') }}">
@endpush

@push('scripts')
  <script src="{{ asset('assets/global/vendor/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/global/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/global/vendor/dropify/dropify.min.js') }}"></script>
  <script src="{{ asset('assets/global/vendor/summernote/summernote.min.js') }}"></script>
  <script src="{{ asset('assets/global/vendor/formvalidation/formValidation.min.js') }}"></script>
  <script src="{{ asset('assets/global/vendor/formvalidation/framework/bootstrap4.min.js') }}"></script>  
  <script src="{{ asset('assets/global/js/Plugin/filterable.js') }}"></script>
  <script src="{{ asset('assets/examples/js/pages/gallery.js') }}"></script>
  <script src="{{ asset('assets/global/js/Plugin/summernote.js') }}"></script>
  <script src="{{ asset('assets/examples/js/forms/editor-summernote.js') }}"></script>
  <script src="{{ asset('assets/js/validar.js') }}"></script>
@endpush