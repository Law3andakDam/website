class ApplicationController < ActionController::Base
  protect_from_forgery with: :exception

  private

  def load_blood_types
    @blood_types = BloodType.all
  end
end
