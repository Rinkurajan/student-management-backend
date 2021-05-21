  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <div class="row">
                      <div class="col-8">
                          <strong>Delete this record</strong> <br>
                          Once you delete a record, there is no going back. Please be certain.
                      </div>
                      <div class="col-4">
                          <form action="{{ $action }}" method="POST" onsubmit="return confirm('Are you sure?');">
                              @csrf
                              @method('DELETE')
                              <input type="submit" class="btn btn-danger float-right" value="Delete this record" />
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>