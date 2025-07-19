@extends('main')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                <script>
                const barColors = ["red", "green","blue","orange","brown"];

                new Chart("myChart", {
                type: "bar",
                data: {
                    labels: $category,
                    datasets: [{
                    backgroundColor: barColors,
                    data: $qty
                    }]
                },
                options: {
                    legend: {display: false},
                    title: {
                    display: true,
                    text: "Graphic"
                    }
                }
                });
                </script>
            </div>
        </div>
    </div>
@endsection