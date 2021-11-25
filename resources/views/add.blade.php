<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <form method="post" action="{{url('/add')}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEmail4">Name</label>
                        <input type="text" class="form-control" id="" name="name" placeholder="Name" value="{{old('name',@$res->name)}}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEmail4">Age</label>
                        <input type="number" class="form-control" id="" name="age" placeholder="Age" value="{{old('age',@$res->age)}}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputState">Gender</label>
                        <select id="inputState" name="gender" class="form-control" required>
                            <option selected disabled>Choose...</option>
                            @foreach($genders as $gender)
                            <option value="{{$gender}}" {{old('gender',@$res->gender) == $gender ? 'selected' : '' }}>{{$gender}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <label for="">Willing to Work</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineCheckbox1" value="1" {{@$res->willing_to_work == '1'?'checked':'checked'}} name="willing_to_work" required>
                        <label class="form-check-label" for="inlineCheckbox1">yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineCheckbox2" value="1" {{@$res->willing_to_work == '0'?'checked':''}} name="willing_to_work">
                        <label class="form-check-label" for="inlineCheckbox2">no</label>
                    </div>
                </div>
                <div class="col-6">
                    <label for="">Language</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"  name="language_1" value="1" {{old('language_1',@$res->language_1) ? 'checked':''}}>
                        <label class="form-check-label" for="inlineCheckbox1">English</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="language_2" value="1" {{old('language_2',@$res->language_2) ? 'checked':''}}>
                        <label class="form-check-label" for="inlineCheckbox2">Malayalam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="language_3" value="1" {{old('language_3',@$res->language_3) ? 'checked':''}}>
                        <label class="form-check-label" for="inlineCheckbox3">Arabic</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="language_4" value="1" {{old('language_4',@$res->language_4) ? 'checked':''}}>
                        <label class="form-check-label" for="inlineCheckbox3">Hindi</label>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{@$res->id?:0}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>