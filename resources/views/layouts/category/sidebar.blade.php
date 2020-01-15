@extends('layouts.app')

@section('content')
       <div id="column-left" class="col-sm-3 hidden-xs column-left">
          <div class="Categories left-sidebar-widget">
          <div class="columnblock-title">Top Categories</div>
          <div class="category_block">
            <ul class="box-category treeview">
                @foreach ($brands as $brand)
                  <li><a href="#" class="activSub">{{$brand->name}}</a>
                    <ul>
                        @foreach ($brand->categories()->get()->pluck('name') as $item)
                        <li>
                            <a href="#">{{$item}}</a>
                        </li>
                        @endforeach
                    </ul>
                  </li>
                @endforeach
            </ul>
          </div>
        </div>
        <div class="filter left-sidebar-widget">
          <div class="columnblock-title">Refine Search</div>
          <div class="filter-block">
            <div class="list-group">
              <p class="list-group-item">Color</p>
              <div class="list-group-item">
                <div id="filter-group1">
                  <label class="checkbox">
                    <input name="filter[]" type="checkbox" value="1" />
                    Black (7)</label>
                  <label class="checkbox">
                    <input name="filter[]" type="checkbox" value="2" />
                    Blue (6)</label>
                  <label class="checkbox">
                    <input name="filter[]" type="checkbox" value="3" />
                    Red (6)</label>
                </div>
              </div>
              <p class="list-group-item">Price</p>
              <div class="list-group-item">
                <div id="filter-group2">
                  <label class="checkbox">
                    <input name="filter[]" type="checkbox" value="4" />
                    $100-$300 (6)</label>
                  <label class="checkbox">
                    <input name="filter[]" type="checkbox" value="5" />
                    $301-$1000 (6)</label>
                </div>
              </div>
              <p class="list-group-item">Size</p>
              <div class="list-group-item">
                <div id="filter-group3">
                  <label class="checkbox">
                    <input name="filter[]" type="checkbox" value="6" />
                    Big (3)</label>
                  <label class="checkbox">
                    <input name="filter[]" type="checkbox" value="7" />
                    Medium (3)</label>
                  <label class="checkbox">
                    <input name="filter[]" type="checkbox" value="8" />
                    Small (1)</label>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
            </div>
          </div>
        </div>
        <div class="banner left-sidebar-widget"> <a href="#"><img src="image/banners/LeftBanner.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
        <div class="special left-sidebar-widget">
          <div class="columnblock-title">Special Product</div>
          <ul class="row ">
            <li class="product-layout">
              <div class="product-list col-xs-4">
                <div class="product-thumb">
                  <div class="image product-imageblock">
                  <a href="product.html">
                  <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-06.jpg">
                  <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-06-1.jpg">
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-xs-8">
                <div class="caption product-detail">
                  <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle Hem</a></h4>
                  <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> </p>
                  <div class="addto-cart"><a href="#">Add to Cart</a></div>
                </div>
              </div>
            </li>
            <li class="product-layout">
              <div class="product-list col-xs-4">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product.html">
                  <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-02.jpg">
                  <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-02-1.jpg">
                  </a> </div>
                </div>
              </div>
              <div class="col-xs-8">
                <div class="caption product-detail">
                  <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle Hem</a></h4>
                  <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> </p>
                  <div class="addto-cart"><a href="#">Add to Cart</a></div>
                </div>
              </div>
            </li>
            <li class="product-layout">
              <div class="product-list col-xs-4">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product.html">
                  <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-03.jpg">
                  <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-03-1.jpg">
                  </a> </div>
                </div>
              </div>
              <div class="col-xs-8">
                <div class="caption product-detail">
                  <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle Hem</a></h4>
                  <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> </p>
                  <div class="addto-cart"><a href="#">Add to Cart</a></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>


      <div class=" content col-sm-9">
        <div class="category-page-wrapper">
          <div class="col-md-2 text-right sort-wrapper">
            <label class="control-label" for="input-sort">Sort By :</label>
            <div class="sort-inner">
              <select id="input-sort" class="form-control">
                <option value="ASC" selected="selected">Default</option>
                <option value="ASC">Name (A - Z)</option>
                <option value="DESC">Name (Z - A)</option>
                <option value="ASC">Price (Low &gt; High)</option>
                <option value="DESC">Price (High &gt; Low)</option>
                <option value="DESC">Rating (Highest)</option>
                <option value="ASC">Rating (Lowest)</option>
                <option value="ASC">Model (A - Z)</option>
                <option value="DESC">Model (Z - A)</option>
              </select>
            </div>
          </div>
          <div class="col-md-1 text-right page-wrapper">
            <label class="control-label" for="input-limit">Show :</label>
            <div class="limit">
              <select id="input-limit" class="form-control">
                <option value="8" selected="selected">08</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 list-grid-wrapper"> <a href="#" id="compare-total">Product Compare (0)</a>
            <div class="btn-group btn-list-grid">
              <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"></button>
              <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"></button>
            </div>
          </div>
        </div>
        <br />
        <div class="grid-list-wrapper">
          <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
              <div class="image product-imageblock">
              <a href="product.html">
              <img src="image/product/Pro-04.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              <img src="image/product/Pro-04-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              </a>
                <ul class="button-group grid-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart">Add to Cart</button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                <p class="product-desc"> More room to move.

                  With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                  Cover Flow.

                  Browse through your music collection by flipping..</p>
                <ul class="button-group list-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html">
              <img src="image/product/Pro-03.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              <img src="image/product/Pro-03-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              </a>
                <ul class="button-group grid-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                <p class="product-desc"> More room to move.

                  With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                  Cover Flow.

                  Browse through your music collection by flipping..</p>
                <ul class="button-group list-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html">
              <img src="image/product/Pro-06.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              <img src="image/product/Pro-06-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              </a>
                <ul class="button-group grid-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                <p class="product-desc"> More room to move.

                  With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                  Cover Flow.

                  Browse through your music collection by flipping..</p>
                <ul class="button-group list-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html">
              <img src="image/product/Pro-07.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              <img src="image/product/Pro-07-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              </a>
                <ul class="button-group grid-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                <p class="product-desc"> More room to move.

                  With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                  Cover Flow.

                  Browse through your music collection by flipping..</p>
                <ul class="button-group list-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html">
              <img src="image/product/Pro-08.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              <img src="image/product/Pro-08-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              </a>
                <ul class="button-group grid-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                <p class="product-desc"> More room to move.

                  With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                  Cover Flow.

                  Browse through your music collection by flipping..</p>
                <ul class="button-group list-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html">
              <img src="image/product/Pro-09.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              <img src="image/product/Pro-09-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              </a>
                <ul class="button-group grid-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                <p class="product-desc"> More room to move.

                  With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                  Cover Flow.

                  Browse through your music collection by flipping..</p>
                <ul class="button-group list-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html">
              <img src="image/product/Pro-010.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              <img src="image/product/Pro-010-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              </a>
                <ul class="button-group grid-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                <p class="product-desc"> More room to move.

                  With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                  Cover Flow.

                  Browse through your music collection by flipping..</p>
                <ul class="button-group list-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="product-layout product-list col-xs-12">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html">
              <img src="image/product/Pro-01.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              <img src="image/product/Pro-01-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
              </a>
                <ul class="button-group grid-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                <p class="product-desc"> More room to move.

                  With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                  Cover Flow.

                  Browse through your music collection by flipping..</p>
                <ul class="button-group list-btn">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="category-page-wrapper">
          <div class="result-inner">Showing 1 to 8 of 10 (2 Pages)</div>
          <div class="pagination-inner">
            <ul class="pagination">
              <li class="active"><span>1</span></li>
              <li><a href="category.html">2</a></li>
              <li><a href="category.html">&gt;</a></li>
              <li><a href="category.html">&gt;|</a></li>
            </ul>
          </div>
        </div>
      </div>


@endsection

