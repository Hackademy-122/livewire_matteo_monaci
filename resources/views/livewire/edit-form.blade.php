<div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form wire:submit = 'update'>
                    <div class="mb-3">
                      <label for="inputTitle" class="form-label">Titolo:</label>
                      <input type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" wire:model="title">
                    </div>
                    <div class="mb-3">
                        <label for="inputBody" class="form-label">Body:</label>
                        <textarea type="inputBody" cols="10" rows="10" class="form-control" id="inputBody" aria-describedby="bodyHelp" wire:model="body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica articolo!</button>
                </form>
            </div>
        </div>
    </div>

</div>
