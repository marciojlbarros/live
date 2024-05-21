<div>
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <form wire:submit='create' action="#">
            <div class="card px-1 py-4">
                <div class="card-body">
                    <h6 class="card-title mb-3">Create Post</h6>
                    <div class="row">
                        <div class="col-sm-12">

                            @if(session()->has('success'))
                            <span class="text text-success">{{ session()->get('success') }}</span>
                            @endif

                            <div class="form-group">

                                @error('form.title')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror

                                <div class="input-group">
                                    <input wire:model.live.debounce.500ms='form.title' class="form-control" type="text"
                                        name="title" placeholder="Title">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                @error('form.content')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                                <div class="input-group">
                                    <textarea wire:model.live.debounce.500ms='form.content' name="content"
                                        placeholder="Content" class="form-control content"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex;align-items:center">
                        <button type="submit"
                            class="btn btn-primary btn-block confirm-button px-5 mt-3 mb-3">Confirm</button>
                        <div wire:loading wire:target='create'>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                style="margin: auto; background: rgb(255, 255, 255); display: block; shape-rendering: auto;"
                                width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <circle cx="30" cy="50" fill="#e90c59" r="20">
                                    <animate attributeName="cx" repeatCount="indefinite" dur="1s" keyTimes="0;0.5;1"
                                        values="30;70;30" begin="-0.5s"></animate>
                                </circle>
                                <circle cx="70" cy="50" fill="#46dff0" r="20">
                                    <animate attributeName="cx" repeatCount="indefinite" dur="1s" keyTimes="0;0.5;1"
                                        values="30;70;30" begin="0s"></animate>
                                </circle>
                                <circle cx="30" cy="50" fill="#e90c59" r="20">
                                    <animate attributeName="cx" repeatCount="indefinite" dur="1s" keyTimes="0;0.5;1"
                                        values="30;70;30" begin="-0.5s"></animate>
                                    <animate attributeName="fill-opacity" values="0;0;1;1" calcMode="discrete"
                                        keyTimes="0;0.499;0.5;1" dur="1s" repeatCount="indefinite"></animate>
                                </circle>
                                <!-- [ldio] generated by https://loading.io/ -->
                            </svg>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>