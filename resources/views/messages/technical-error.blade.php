@extends('layout.master')

@push('css')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Bungee");

        .error-design {
            color: white;
            /* font-family: "Bungee", cursive; */
            margin-top: 10%;
            text-align: center;
        }

        .error-design h1 {
            font-family: "Bungee", cursive;
        }

        .error-design h2 {
            font-family: "Bungee", cursive;
        }

        .error-design svg {
            font-family: "Bungee", cursive;
        }

        .error-design a {
            color: #2aa7cc;
            text-decoration: none;
        }

        .error-design a:hover {
            color: green;
        }

        .error-design svg {
            width: 50vw;
        }

        .error-design .lightblue {
            fill: #444;
        }

        .error-design .eye {
            cx: calc(110px + 30px * var(--mouse-x));
            cy: calc(50px + 30px * var(--mouse-y));
        }

        .error-design #eye-wrap {
            overflow: hidden;
        }

        .error-design .error-text {
            font-size: 120px;
        }

        .error-design .alarm {
            animation: alarmOn 0.5s infinite;
        }

        @keyframes alarmOn {
            to {
                fill: #6d2c0e;
            }
        }
    </style>
@endpush

@section('content')
    <div class="error-design col-md-12">
        <svg xmlns="http://www.w3.org/2000/svg" id="robot-error" viewBox="0 0 260 118.9" role="img">
            <title xml:lang="en">500 Error</title>

            <defs>
                <clipPath id="white-clip">
                    <circle id="white-eye" fill="#cacaca" cx="122" cy="65" r="20" />
                </clipPath>
                <text id="text-s" class="error-text" y="106"> 500 </text>
            </defs>
            <path class="alarm" cx="96" fill="#e62326"
                d="M114 19.6V9.1c0-5 4.1-9.1 9.1-9.1h0c5 0 9.1 4.1 9.1 9.1v10.6" />
            <use xlink:href="#text-s" x="-0.5px" y="-1px" fill="black"></use>
            <use xlink:href="#text-s" fill="#2b2b2b"></use>
            <g id="robot">
                <g id="eye-wrap">
                    <use xlink:href="#white-eye"></use>
                    <circle id="eyef" class="eye" clip-path="url(#white-clip)" fill="#000" stroke="#2aa7cc"
                        stroke-width="2" stroke-miterlimit="10" cx="122" cy="65" r="11" />
                    <ellipse id="white-eye" fill="#2b2b2b" cx="122" cy="40" rx="18" ry="12" />
                </g>
                <circle class="lightblue" cx="96" cy="32" r="2.5" id="tornillo" />
                <use xlink:href="#tornillo" x="50"></use>
                <use xlink:href="#tornillo" x="50" y="60"></use>
                <use xlink:href="#tornillo" y="60"></use>
            </g>
        </svg>
        <h1>Techcal error
            <span style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal">!</span>
        </h1>
        <h2>Go <a href="{{ route('admin.index') }}">Back!</a></h2>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Technical Error!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <strong>{{ request()->route()->getActionName()??'' }}</strong>
                    <p class="modal-text" style="color:red;">
                        {{ $errorMessage }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        var root = document.documentElement;
        var eyef = document.getElementById('eyef');
        var cx = document.getElementById("eyef").getAttribute("cx");
        var cy = document.getElementById("eyef").getAttribute("cy");

        document.addEventListener("mousemove", evt => {
            let x = evt.clientX / innerWidth;
            let y = evt.clientY / innerHeight;

            root.style.setProperty("--mouse-x", x);
            root.style.setProperty("--mouse-y", y);

            cx = 115 + 30 * x;
            cy = 50 + 30 * y;
            eyef.setAttribute("cx", cx);
            eyef.setAttribute("cy", cy);

        });

        document.addEventListener("touchmove", touchHandler => {
            let x = touchHandler.touches[0].clientX / innerWidth;
            let y = touchHandler.touches[0].clientY / innerHeight;

            root.style.setProperty("--mouse-x", x);
            root.style.setProperty("--mouse-y", y);
        });
    </script>
@endpush
