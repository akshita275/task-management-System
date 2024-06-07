<x-app-layout>
    
    <div class="wrapper">
        @include('components.user-header')
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-2">Designations</h1>
                    
                  </div>
                  
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    @foreach ($designations as $designation)
                    @if ($designation->status == 1)
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-gradient-warning">
                      <div class="inner font-sans font-bold">
                          <h2 class="p-2">{{ $designation->designation_name }}</h2>
                          
                          <p class="p-2">{{$designation->description}}</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-laptop "></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->
                    @endif
                        
                    @endforeach
                  
                  
                     
                </div>
                <!-- /.row (main row) -->
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
       
      
        
        <!-- /.control-sidebar -->
    </div>
    
</x-app-layout>
