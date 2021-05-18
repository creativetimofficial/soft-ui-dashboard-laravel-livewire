<div class="container-fluid py-4">
    <div class="card">
      <div class="card-header pb-0 px-3">
        <h6 class="mb-0">Profile Information</h6>
      </div>
      <div class="card-body pt-4 p-3">
          <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user-name" class="form-control-label">Full Name</label>
                  <div class="@error('user.name')border border-danger rounded-3 @enderror mb-3">
                    <input wire:model="user.name" class="form-control" type="text" placeholder="Name" id="user-name">
                  </div>
                  @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="user-email" class="form-control-label">Email</label>
                    <div class="@error('user.email')border border-danger rounded-3 @enderror mb-3">
                      <input wire:model="user.email"class="form-control" type="email" placeholder="@example.com" id="user-email">
                    </div>
                  @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user.phone" class="form-control-label">Phone</label>
                  <div class="@error('user.phone')border border-danger rounded-3 @enderror mb-3">
                    <input wire:model="user.phone" class="form-control" type="tel" placeholder="40-(770)-888-444" id="phone">
                  </div>
                  @error('user.phone') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user.location" class="form-control-label">Location</label>
                  <div class="@error('user.location') border border-danger rounded-3 @enderror mb-3">
                    <input wire:model="user.location"class="form-control" type="text" placeholder="Location" id="name">
                  </div>
                  @error('user.location') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="about">About Me</label>
              <div class="@error('user.about')border border-danger rounded-3 @enderror mb-3">
                <textarea wire:model="user.about" class="form-control" id="about" rows="3" placeholder="Say something about yourself"></textarea>
              </div>
              @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="">
              <button type="submit" class="btn bg-gradient-info btn-lg mt-4 mb-4">Save Changes</button>
          </div>
        </form>

        @if($showSuccesNotification)
        <div wire:model="showSuccesNotification" class="mt-3 alert alert-light alert-dismissible fade show" role="alert">
          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
          <span class="alert-text"> Your profile information have been successfuly saved!</span>
          <button  wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        @endif

      </div>
    </div>
  </div>