<x-layout>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center mb-5 text-white">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i>
            </div>
            <h1 class="fw-bolder text-white">Ehy!</h1>
            <p class="lead fw-normal mb-0 text-white">Scrivi tutto quello che ti passa per la testa!</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="username" name="username" type="text"
                            placeholder="Inserisci Username">
                        <label for="username" class="text-muted">Username</label>

                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email"
                            placeholder="nome@esempio.com">
                        <label for="email" class="text-muted">Email</label>

                    </div>


                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" name="message" type="text" placeholder="Inserisci Messaggio"
                            style="height: 10rem"></textarea>
                        <label for="message" class="text-muted">Messaggio</label>

                    </div>



                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
