<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel=stylesheet href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light" >
    <section class="container">
        <div class="row">
            {{-- <div class="col-md-6 offset-md-3 my-3"> --}}
                <div class="card">
                    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">                      
                            <form action="{{route('ttalogin.ttaindex')}}" method="post"  class="bg-white p-4 rounded shadow-sm" style="width: 600px; min-height: 300px; display: flex; flex-direction: column; justify-content: center;">
                                @csrf
                                {{-- class="card-header"> có thể gọi ở người form --}}
                                <div style="color:rgb(152, 182, 55)">
                                     <h1>Login</h1>
                                 </div>
                                <div class="form-group">
                                    <label for="exampl" >Fullname</label>
                                    <input type="text" name="Fullname" id="Fullname" placeholder="input your fullname " class="form-control">
                                    @error('Fullname')
                                        <span class="text-denger"> {{$message}}  </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampl" >Email</label>
                                    <input type="email" name="email" id="email" placeholder="loginemail@gmail.com" class="form-control">
                                    @error('email')
                                        <span class="text-denger"> {{$message}}  </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password" >Pass</label>
                                    <input type="password" class="form-control" name="password" id="password" value="20122005@" placeholder="password">
                                    @error('password')
                                            <span class="text-denger">{{$message}} </span>                
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mt-3" style="width: 90px;" >Submit</button>
                            </form>
                        </div>
                    </div> 
                </div>
            {{-- </div> --}}
    </section>
</body>
</html>