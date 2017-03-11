Rails.application.routes.draw do
  root 'pages#index'

  %i(about contact terms).each do |page|
    get page, to: "pages##{page}", as: page
  end

  devise_for :users
  mount RailsAdmin::Engine => '/admin', as: 'rails_admin'
end
