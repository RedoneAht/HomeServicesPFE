<div>

                <h1>Ajouter un service</h1>

                            <div class="panel panel-default" style="font-weight: 600;">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Ajouter un nouveau service
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.all_services') }}" class="btn btn-info pull-right">Tous les services</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    <form class="form-horizontal" wire:submit.prevent="createService">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name" class="control-label col-sm-2">Nom: </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug"/>
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group" style="display: none;">
                                            <label for="slug" class="control-label col-sm-2">Slug: </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="slug" wire:model="slug"/>
                                                @error('slug')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tagline" class="control-label col-sm-2">Slogan: </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="tagline" wire:model="tagline"/>
                                                @error('tagline')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="service_category_id" class="control-label col-sm-2">Catégorie de services: </label>
                                            <div class="col-sm-7">
                                                <select name="service_category_id" class="form-control" wire:model="service_category_id">
                                                    <option value="">Choisir une catégorie</option>

                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach

                                                </select>
                                                @error('service_category_id')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price" class="control-label col-sm-2">Prix: </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="price" wire:model="price"/>
                                                @error('price')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="control-label col-sm-2">Description: </label>
                                            <div class="col-sm-7">
                                                <textarea class="form-control" wire:model='description'></textarea>
                                                @error('description')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="control-label col-sm-2">Thumbnail: </label>
                                            <div class="col-sm-7">
                                                <input type="file" class="form-control-file" name="thumbnail" wire:model="thumbnail"/>
                                                @error('thumbnail')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                @if ($thumbnail)
                                                    <img src="{{ $thumbnail->temporaryUrl() }}" width="60" />
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="control-label col-sm-2">Image: </label>
                                            <div class="col-sm-7">
                                                <input type="file" class="form-control-file" name="image" wire:model="image"/>
                                                @error('image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}" width="60" />
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label col-sm-3"></label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-success pull-right">Ajouter Service</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
