<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">ADD NEW GAME</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="gametitle">Game Title</label>
      <input type="text" class="form-control border border-secondary pl-2" id="gametitle" placeholder="Game Title">
    </div>
    <div class="range-wrap col-md-6">
    <div class="range-value" id="rangeV"></div>
    <label for="range">Age Limit</label>
    <input id="range" type="range" min="0" max="25" value="0" step="1" style="padding-top: 6%">
    
  </div>
    </div>
  <div class="form-group">
    <label for="gametag">Game Tags</label>
    <div class="containter" id="gametag">
        <div class="row">
            <div class="col-sm">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">1 checkbox</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">2 checkbox</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">3 checkbox</label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                    <label class="form-check-label" for="defaultCheck4">4 checkbox</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                    <label class="form-check-label" for="defaultCheck5">5 checkbox</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                    <label class="form-check-label" for="defaultCheck6">6 checkbox</label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                    <label class="form-check-label" for="defaultCheck4">4 checkbox</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                    <label class="form-check-label" for="defaultCheck5">5 checkbox</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                    <label class="form-check-label" for="defaultCheck6">6 checkbox</label>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control border border-secondary pl-2" id="description" rows="3" placeholder="Description"></textarea>
  </div>
  <div class="form-row">
  <div class="form-group col-md-5">
    <label for="logoPhoto">Choose Logo Photo</label>
    <input type="file" class="form-control-file ml-0 pl-0 border-0" id="logoPhoto">
  </div>
    <div class="col-md-1"></div>
    <div class="form-group col-md-5">
    <label for="bannerPhoto">Choose Banner Photo </label>
    <input type="file" class="form-control-file ml-0 pl-0 border-0" id="bannerPhoto">
  </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
ageSlider();
</script>