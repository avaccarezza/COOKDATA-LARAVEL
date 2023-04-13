<div class="row mb-3">
    <label class="col-md-4 col-form-label text-md-end">{{ __('Perfil') }}</label>
    <div class="col-md-6">
        <select class="form-select" aria-label="Default select example" name="profile" required>
            @foreach ($profiles as $profile)
                <option  value="">{{$profile->profile}}</option>
            @endforeach
        </select>
    </div>
</div>