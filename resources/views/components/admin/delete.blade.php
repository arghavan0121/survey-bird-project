  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <div class="row">
                      <div class="col-8">
                          <h6>{{ __('حذف این سطر') }}</h6>
                          <h6>{{ __('هنگامی که یک رکورد را حذف می کنید، دیگر راه برگشتی وجود ندارد. لطفا مطمئن باشید') }}</h6>
                      </div>
                      <div class="col-4">
                          <form action="{{ $action }}" method="POST" onsubmit="return confirm('آیا می خواهید این سطر را حذف کنید؟');">
                              @csrf
                              @method('DELETE')
                              <input type="submit" class="btn btn-danger float-right" value="{{ __('حذف سطر') }}" />
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
