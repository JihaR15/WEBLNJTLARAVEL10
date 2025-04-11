<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h1>{{ $breadcrumb->title }}</h1></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            @foreach ($breadcrumb->list as $key => $value)
                @if ($key == count($breadcrumb->list) - 1)
                    <li class="bredcrumb-item active">{{ $value }}</li>
                @else
                    <li class="bredcrumb-item">{{ $value }} <span class="mx-1">/</span></li>
                @endif
            @endforeach
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>