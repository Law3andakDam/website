class DonersController < ApplicationController
  def index
    @doners = Doner.includes(:blood_type).actived.page(params[:page] || 1)
  end

  def new
    @doner = Doner.new
    load_types
  end

  def create
    @doner = Doner.new(doner_params)
    if @doner.save
      redirect_to doners_url, notice: "a confirmation mail send to #{@doner.email}, please click the confirmation link."
    else
      load_types
      render :new
    end
  end

  def confirmation
    @doner = Doner.find_by!(confirmation_token: params[:confirmation_token])
    @doner.update(confirmed_at: Time.now.utc)
    redirect_to root_url, notice: "your email #{@doner.email} confirmed successfully"
  end

  private

  def doner_params
    params.require(:doner).permit(:email, :mobile, :blood_type_id)
  end

  def load_types
    @blood_types = BloodType.all
  end
end
