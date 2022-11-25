<div class="row" style="text-align: left">
    <div class="col-md-12" style="text-align: center">
        <h3>Result of KNN Classification :</h3>
    </div>

    <div class="col-md-12" style="text-align: center; padding-top: 20px;">
        <div class="progress" style="height: 100px;">
            <div class="progress-bar bg-danger text-break fs4em" style="width: {{round($persen_hoax, 2)}}%;font-size: 2em;">
                {{round($persen_hoax, 2)}}%
            </div>
            <div class="progress-bar bg-success text-break fs4em" style="width: {{round($persen_non_hoax, 2)}}%;font-size: 2em;">
                {{round($persen_non_hoax, 2)}}%
            </div>
        </div>
    </div>


    <div class="col-md-12">
        <strong class="fs3em">Detail : </strong>
        <ul style="padding: 6px 22px;">
            <li class="fs3em"><div><div class='box red'></div> : HOAX</div></li>
            <li class="fs3em"><div><div class='box green'></div> : BUKAN HOAX</div></li>
            <li class="fs3em">Hasil klasifikasi : {{$KELAS_PREDIKSI}}</li>
            <li class="fs3em">Jumlah dokumen uji : {{$N}}</li>
            {{-- <li class="fs3em">Tetangga Hoax : {{$vote_hoax}}</li>
            <li class="fs3em">Tetangga Non-Hoax : {{$vote_non_hoax}}</li> --}}
            <li class="fs3em">Bobot Hoax : {{$bobot_hoax}}</li>
            <li class="fs3em">Bobot Non-Hoax : {{$bobot_non_hoax}}</li>
        </ul>
    </div>
</div>
