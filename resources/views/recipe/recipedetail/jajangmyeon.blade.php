@extends('layouts.app')

@section('content')
    <h1 style="padding-top: 20px; padding-bottom: 20px; margin-left: 50px;">Jajangmyeon</h1>
    <div class="row">
        <div class="col-md-5">
            <img src="/img/food/jjajangmyeon.jpg" alt="img-error" height="350px" >
            <div style="margin: 18px;padding-top: 50px;">
                @include('addcomment')
            </div>
        </div>
        
        <div id="box" class="container">
            <div style="padding: 1%; padding-top: 3%;">
                <div class="container" style=" padding: 15px;">
                    <h3>
                        Ingredients for 2-3 servings
                    </h3>
                    <h5>
                        1. jjajangmyeon noodles<br>
                        2. ½ pound pork belly, cut into ½ inch cubes (about 1½ cups’ worth)<br>
                        3. 1 cup of zucchini, cut into ½ inch cubes<br>
                        4. 1 cup of potato, peeled and cut into ½ inch cubes<br>
                        5. 1½ cups of onion chunks<br>
                        6. 3 Tablespoons of vegetable oil<br>
                        7. ¼ cup and 1 Tablespoon of black bean paste<br>
                        8. 2 Tablespoons of potato starch powder, combined with ¼ cup water and 1 teaspoon of sugar in a small bowl, set aside<br>
                        9. 1 teaspoon of toasted sesame oil<br>
                        10. ½ cup cucumber, cut into thin matchsticks for garnish<br>
                        11. water<br>
                    </h5>
                </div>
            </div>
            <div style="padding: 1%; padding-top: 3%">
                <div class="container" style=" padding: 15px;">
                    <h3>
                        Steps
                    </h3>
                    <h5>
                        1. Stir-fry the pork belly in a large, deep wok with 1 Tablespoon of vegetable oil for about 4-5 minutes, until golden brown and crispy. <br>
                        2. Pour out the excess pork fat<br>
                        3. Add radish and stir fry for 1 minute<br>
                        4. Add potato, onion, and zucchini and keep stirring for about 3 minutes until the potato looks a little translucent.<br>
                        5. Clear a space in the center of the wok by pushing the ingredients to the edges.<br>
                        6. Add 2 Tablespoons of vegetable oil to the center of the wok, then add ¼ cup of black bean paste and stir it with a wooden spoon for 1 minute to fry it. Then mix everything in the wok and keep stirring.<br>
                        7. Add  2 cups of water to the wok and let it cook with the lid closed for about 10 minutes.<br>
                        8. Open the lid and taste a sample of the radish and potato. If they’re fully cooked, stir in the starch water little by little. Keep stirring until it’s well mixed and thick.<br>
                        9. Add the sesame oil and remove from the heat.<br>
                        10. Serve with noodles (jjajangmyeon) or steamed rice (jjajangbap).<br>
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection