<footer class="footer pb-4">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-left text-sm text-muted text-lg-left">
                    © {{ now()->year }} Dev by <a style="color: #252f40;" href="https://ko-fi.com/pichapob" class="font-weight-bold ml-1"
                        target="_blank">Pichapob.k</a> &amp; <a style="color: #252f40;" href="https://buymeacoffee.com/pichapob"
                        class="font-weight-bold ml-1" target="_blank">Pakpoom.M</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted" target="_blank">HCRS Version : {{config('version.string') ?? 'v0.0.0'}}</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                            Tim</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.updivision.com" class=" nav-link text-muted" target="_blank">UPDIVISION</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                            target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                            target="_blank">License</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</footer>
