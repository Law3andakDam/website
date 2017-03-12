class User < ApplicationRecord
  devise :database_authenticatable, :recoverable, :rememberable, :trackable, :validatable, :confirmable
  enum role: %i(admin organization)
end
