@extends('layouts.auth')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verify OTP</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('otp.verify') }}">
                        @csrf

                        <div class="form-group">
                            <label for="otp">OTP</label>
                            <input type="text" name="otp" id="otp" class="form-control @error('otp') is-invalid @enderror" required>
                            @error('otp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verify OTP</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('otp.verify') }}">
                        @csrf

                        <div class="form-group">
                            <label for="otp">OTP</label>
                            <input type="text" name="otp" id="otp" class="form-control @error('otp') is-invalid @enderror" required>
                            @error('otp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Verify</button>
                        </div>
                    </form>

                    <div class="mt-3">
                        <p>Waktu tersisa: <span id="timer">01:00</span></p>
                        <button id="resendButton" class="btn btn-secondary" style="display: none;">Kirim Ulang Kode</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let timeLeft = 60;
    let timer = document.getElementById('timer');
    let resendButton = document.getElementById('resendButton');

    function updateTimer() {
        let minutes = Math.floor(timeLeft / 60);
        let seconds = timeLeft % 60;
        timer.innerHTML = minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0');

        if (timeLeft > 0) {
            timeLeft--;
            setTimeout(updateTimer, 1000);
        } else {
            resendButton.style.display = 'block';  // Tampilkan tombol setelah timer habis
        }
    }

    updateTimer();

    resendButton.addEventListener('click', function() {
        resendButton.disabled = true;
        
        fetch("{{ route('otp.resend') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({})
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Kode OTP baru telah dikirim.');
                timeLeft = 60; // Reset timer
                resendButton.style.display = 'none';  // Sembunyikan kembali tombol saat timer dimulai
                updateTimer();
            } else {
                alert('Gagal mengirim ulang kode. Silakan coba lagi.');
                resendButton.disabled = false;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan. Silakan coba lagi.');
            resendButton.disabled = false;
        });
    });
</script>


@endsection


